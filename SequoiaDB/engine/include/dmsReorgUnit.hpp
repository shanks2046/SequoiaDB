#ifndef DMSREORGUNIT_HPP__
#define DMSREORGUNIT_HPP__
#include "core.hpp"
#include "oss.hpp"
#include "ossMmap.hpp"
#include "dms.hpp"
#include "dmsExtent.hpp"
#include "ossUtil.hpp"
#include "ossMem.hpp"
#include "../bson/bson.h"
#include "../bson/oid.h"
using namespace bson ;

namespace engine
{
   class _pmdEDUCB ;
#define DMS_REORG_UNIT_EYECATCHER "DMSREORG"
#define DMS_REORG_UNIT_EYECATCHER_LEN 8
   class _dmsReorgUnit : public SDBObject
   {
   private :
      class _reorgUnitHead : public SDBObject
      {
      public :
         CHAR _eyeCatcher [ DMS_REORG_UNIT_EYECATCHER_LEN ] ;
         INT32 _headerSize ;
         CHAR _fileName [ OSS_MAX_PATHSIZE ] ;
         SINT32 _pageSize ;
      } ;
      SINT32 _pageSize ;
      INT32 _headSize ;
      BOOLEAN _readOnly ;
      CHAR _fileName [ OSS_MAX_PATHSIZE + 1 ] ;
      OSSFILE _file ;
      INT32 _init ( BOOLEAN createNew ) ;
      INT32 _allocateExtent ( INT32 requestSize ) ;
      INT32 _flushExtent () ;
      void _initExtentHeader ( dmsExtent *extAddr, UINT16 numPages ) ;
      CHAR *_pCurrentExtent ;
      INT32 _currentExtentSize ;
   public :
      _dmsReorgUnit ( CHAR *pFileName, SINT32 pageSize ) ;
      ~_dmsReorgUnit () ;
      INT32 open ( BOOLEAN createNew ) ;
      void close () ;
      void reset () ;
      INT32 cleanup () ;
      INT32 flush () ;
      INT32 importMME ( const CHAR *pMME ) ;
      INT32 insertRecord ( BSONObj &obj, _pmdEDUCB *cb, UINT32 attributes ) ;
      INT32 exportMME ( CHAR *pBuffer ) ;
      INT32 getNextExtentSize ( SINT32 &size ) ;
      INT32 exportExtent ( CHAR *pBuffer ) ;
      INT32 getHeadSize ()
      { return _headSize; }
      INT32 exportHead ( CHAR *pBuffer ) ;
      INT32 validateHeadBuffer ( CHAR *pBuffer ) ;
   } ;
   typedef class _dmsReorgUnit dmsReorgUnit ;
}

#endif
