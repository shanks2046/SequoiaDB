/*******************************************************************************


   Copyright (C) 2011-2014 SequoiaDB Ltd.

   This program is free software: you can redistribute it and/or modify
   it under the term of the GNU Affero General Public License, version 3,
   as published by the Free Software Foundation.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warrenty of
   MARCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with this program. If not, see <http://www.gnu.org/license/>.

   Source File Name = omagent.hpp

   Dependencies: N/A

   Restrictions: N/A

   Change Activity:
   defect Date        Who Description
   ====== =========== === ==============================================
          06/30/2014  TZB Initial Draft

   Last Changed =

*******************************************************************************/

#ifndef OMAGENT_HPP_
#define OMAGENT_HPP_

#include "core.hpp"
#include "../bson/bson.h"
#include "ossUtil.hpp"
#include "sptApi.hpp"
#include "omagentMsgDef.hpp"

using namespace std ;
using namespace bson ;

#define STAGE_INSTALL                    OMA_FIELD_STAGE_INSTALL
#define STAGE_UNINSTALL                  OMA_FIELD_STAGE_UNINSTALL
#define STAGE_ROLLBACK                   OMA_FIELD_STAGE_ROLLBACK

#define INSTALL_STAGE_INSTALL            ""

namespace engine
{

   struct _InstallInfo
   {
      string _hostName ;
      string _svcName ;
      string _dbPath ;
      string _confPath ;
      string _dataGroupName ;
      string _sdbUser ;
      string _sdbPasswd ;
      string _sdbUserGroup ;
      string _user ;
      string _passwd ;
      string _sshPort ;
      BSONObj _conf ;
   } ;
   typedef struct _InstallInfo InstallInfo ;

   struct _InstalledNode
   {
      string _role ;
      string _dataGroupName ;
      string _hostName ;
      string _svcName ;
   } ;
   typedef struct _InstalledNode InstalledNode ;

   struct _InstallResult
   {
      INT32 _rc ;
      INT32 _totalNum ;
      INT32 _finishNum ;
      string _errMsg ;
      string _desc ;
      vector< InstalledNode > _installedNodes ;
   } ;
   typedef struct _InstallResult InstallResult ;

   struct _UninstallResult
   {
      INT32 _rc ;
      INT32 _totalNum ;
      INT32 _finishNum ;
      string _errMsg ;
      string _desc ;
   } ;
   typedef struct _UninstallResult UninstallResult ;

   struct _RollbackInfo
   {
      map< string, vector<InstalledNode> > _standaloneRollbackInfo ;
      map< string, vector<InstalledNode> > _coordRollbackInfo ;
      map< string, vector<InstalledNode> > _catalogRollbackInfo ;
      map< string, vector<InstalledNode> > _dataGroupRollbackInfo ;
   } ;
   typedef struct _RollbackInfo RollbackInfo ;

   struct _AddHost
   {
      std::string _ip ;
      std::string _userName ;
      std::string _passwd ;
      std::string _installPath ;
   } ;
   typedef struct _AddHost AddHost ;

   enum OMA_JOB_STATUS
   {
      OMA_JOB_STATUS_INIT         = 1 ,
      OMA_JOB_STATUS_RUNNING      = 2 ,
      OMA_JOB_STATUS_FINISH       = 3 ,
      OMA_JOB_STATUS_FAIL         = 4 ,

      OMA_JOB_STATUS_END          = 10
   } ;

   enum OMA_INSTALL_DB_STAGE
   {
      OMA_INSTALL_INSTALL         = 1,
      OMA_INSTALL_ROLLBACK        = 2,

      OMA_INSTALL_END             = 10
   } ;

}





#endif // OMAGENT_HPP_
